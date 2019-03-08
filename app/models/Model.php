<?php

namespace App\Models;

class Model {

    protected static $all;
    protected static $loaded = false;
    protected static $name;
    protected static $data;
    protected static $json;
    protected static $node;
    protected static $productos;

    private function __construct() {

    }

    private static function load() {
        static::$loaded = true;
        static::$data = json_decode(file_get_contents('./app/data/' . static::$name . '.json'), true);
        self::$json = static::toObject(static::$data);
        static::$all = self::$json->{static::$node};
        // static::getRelations();
    }

    public static function all() {
        static::isLoaded();
        return static::$all;
    }

    public static function getRelations() {
        static::isLoaded();
      foreach (static::$all as $item) {
        if(isset($item->product_ids)){
          $item->productos = self::getProducts($item->product_ids);
        }
      }
    }

    public static function getProducts($ids) {
        static::isLoaded();
        $products = self::$json->products;
        $relations = [];
        foreach ($products as $product) {
          foreach ($ids as $id) {
            if ($product->generic_id == $id) {
              foreach ($product->etailers as $etailer) {
                $etailer->info = self::getEtailer($etailer->id);
              }
              array_push($relations, $product);
            }
          }
        }
        return $relations;
    }

    public static function getEtailer($id) {
      static::isLoaded();
      $etailers = self::$json->etailers;
      foreach($etailers as $etailer) {
        if ($etailer->id == $id) {
           return $etailer;
        }
      }
      return null;
    }

    public static function allByType($type) {
        static::isLoaded();
        if( isset(static::$all->{$type}) )
          return static::$all->{$type};
        else
          return false;
    }

    public static function find($id) {
        static::isLoaded();
        foreach (static::$all as $item) {
          if ($item->id == $id) {
            if(static::$node == 'products')
              foreach ($item->etailers as $etailer) {
                $etailer->info = self::getEtailer($etailer->id);
              }
              return $item;
          }
        }
        unset($item);
    }

    public static function findBy($attr, $value) {
        static::isLoaded();
        foreach (static::$all as $item) {
          if ($item->{$attr} == $value) {
              return $item;
          }
        }
        unset($item);
    }

    protected static function toObject($array) {
        return json_decode(json_encode($array), FALSE);
    }

    protected static function isLoaded() {
        if (!static::$loaded) static::load();
    }
}
