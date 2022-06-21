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
                    field: 'username',
                    title: 'Utilisateur',
                    width: 100,
                    template: function(data) {
                        var stateNo = data.status;
                        var states = [
                            'brand',
                            'success',
                            'danger',
                            'success',
                            'warning',
                            'dark',
                            'primary',
                            'info'];
                        var state = states[stateNo];

                        var output = '';

                        output = '<div class="kt-user-card-v2">\
                            <div class="kt-user-card-v2__pic">\
                                <div class="kt-badge kt-badge--xl kt-badge--' + state + '">' + data.username.substring(0, 1) + '</div>\
                            </div>\
                        </div>';

                        return output;
                    },
                }, {
                    field: "content",
                    title: "Message",
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
                    field: 'date',
                    title: 'Date',
                    width: 100,
                    type: 'date',
                    format: 'DD/MM/YYYY',
                }, {
                    field: 'status',
                    title: 'Statut',
                    width: 80,
                    // callback function support for column rendering
                    template: function(row) {
                        var status = {
                            1: {'title': 'En cours', 'class': 'kt-badge--brand'},
                            2: {'title': 'Traité', 'class': ' kt-badge--danger'},
                            3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
                            4: {'title': 'Success', 'class': ' kt-badge--success'},
                            5: {'title': 'Info', 'class': ' kt-badge--info'},
                            6: {'title': 'Danger', 'class': ' kt-badge--danger'},
                            7: {'title': 'Warning', 'class': ' kt-badge--warning'},
                        };
                        return '<span class="kt-badge ' + status[row.status].class + ' kt-badge--inline kt-badge--pill">' + status[row.status].title + '</span>';
                    },
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
							<a href="'+deleteUrl+'/'+row.id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Supprimer">\
								<i class="la la-trash"></i>\
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
