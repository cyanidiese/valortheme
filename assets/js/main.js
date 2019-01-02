(function ($) {
    $(document).ready(function () {

        function TemplateComponent() {
            this.initVars();
            this.init();
            this.toggleFirst();
        }

        TemplateComponent.prototype = {
            init: function () {
                this.accordionBtn.on('click touchstart', this.toggleAccordion.bind(this));
            },

            initVars: function () {
                this.accordionBtn = $('.accordion h3');
                this.accordionText = $('.accordion p')
            },

            toggleAccordion: function (event) {
                var el = event.currentTarget;

                $(el).toggleClass('opened');
                $(el).next(this.accordionText).slideToggle().toggleClass('opened');
            },

            toggleFirst: function () {
                var elem = $('.accordion h3:first-child');
                elem.toggleClass('opened');
                elem.next(this.accordionText).slideToggle().toggleClass('opened');
            }
        };

        new TemplateComponent;
    })

})(jQuery);
