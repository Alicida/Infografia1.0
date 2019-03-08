/* Coded by ElFlaco */

class Log {
    constructor() {
        this.styles = [
            'background: #e45d5e',
            'color: #FFFFFF',
            'border-left: 3px solid #2d2d90',
            'padding: 4px 10px 4px 4px',
            'line-height: 40px',
            'text-align: center',
            'font-weight: light',
            'font-family: Arial, Helvetica, sans-serif'
        ].join(';');
        this.message("☠   CircusMarketing");
    }

    message(_msg) {
        if (_msg === undefined) return "Msg is required";
        console.log('%c '+_msg, this.styles);
    }

}

module.exports = Log;