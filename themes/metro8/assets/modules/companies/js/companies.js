
// document ready
$(function () {
    // initiating data table
    var DataTableInstance = new DataTableFactory();
    DataTableInstance.init({
        dt_id : '_datatable',
        columns: [
            { data: 'selectRow', name: 'selectRow' },
            { data: 'id', name: 'id' },    
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'address', name: 'address'},
            {data: 'created_at', name: 'created_at' ,render: function(data, type, row){
                return new Date(row.created_at).toLocaleDateString();
            }},

            { data: 'action', name: 'action' }
    
        ],
    });






    // initiating modal form management
    var ManageModalFormInstance = new ManageModalForm();
    ManageModalFormInstance.init(DataTableInstance,{
      
            'name': {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    }
                }
            },
  

            'phone': {
                validators: {
                    notEmpty: {
                        message: 'Phone is required'
                    }
                }
            },


            
            'email': {
                validators: {
                    notEmpty: {
                        message: 'Email is required'
                    }
                }
            },

            'address': {
                validators: {
                    notEmpty: {
                        message: 'Address is required'
                    }
                }
            },

      

        
    });
});












