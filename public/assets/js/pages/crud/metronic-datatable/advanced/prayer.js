"use strict";
// Class definition

var KTDatatableColumnRenderingDemo = function() {
    // Private functions

    // basic demo
    var demo = function() {

        var datatable = $('.kt-datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: dataUrl,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            mobile: {
                layout: 'compact'
            },

            // column sorting
            sortable: true,

            pagination: false,

            search: {
                input: $('#generalSearch'),
                delay: 400,
            },

            // columns definition
            columns: [
                {
                    field: 'id',
                    title: '#',
                    width: 30,
                    type: 'number',
                    selector: false,
                    textAlign: 'center',
                }, {
                    field: 'hour',
                    title: 'Heure',
                    width: 60,
                    type: 'number',
                    selector: false,
                    textAlign: 'center',
                }, {
                    field: "title",
                    title: "Titre",
                    width: 700,
                    autoHide: false,
                    // callback function support for column rendering
                    template: function(data, i) {
                        var number = i + 1;
                        while (number > 5) {
                            number = number - 3;
                        }
                        var img = number + '.png';

                        var skills = [
                            'Angular, React',
                            'Vue, Kendo',
                            '.NET, Oracle, MySQL',
                            'Node, SASS, Webpack',
                            'MangoDB, Java',
                            'HTML5, jQuery, CSS3'
                        ];

                        var output = '<div><a href="#">'+data.title+'</a><br><span>'+data.content+'</span></div>';

                        return output;
                    }
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<a href="'+editUrl+'/'+row.id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Editer">\
								<i class="la la-edit"></i>\
							</a>\
						';
                    },
                }],

        });

        $('#kt_form_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_form_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_form_status,#kt_form_type').selectpicker();

    };

    return {
        // public functions
        init: function() {
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableColumnRenderingDemo.init();
});
