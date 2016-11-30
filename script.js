jQuery( document ).ready( function() {
    new(Marionette.Object.extend( {

        initialize: function() {
            this.listenTo( Backbone.Radio.channel( 'pikaday' ), 'init', this.modifyDatepicker );
        },

        modifyDatepicker: function( dateObject, fieldModel ) {

            if( nfDatepickerMinDate.field_key != fieldModel.get( 'key' ) ) return;

            var date = new Date( nfDatepickerMinDate.date );
            dateObject.pikaday.setMinDate( date );
            dateObject.pikaday.gotoDate( date );
        }
    }));
});