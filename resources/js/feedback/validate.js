$("#feedbackForm").validate({
    rules:{
        name: {
            required :true,
        },
        email: {
            required :true,
            email: true
        },
        tel: {
            required :true,
        },
        message: {
            required :true,
            min: 2
        }
    },
    submitHandler: function () {
        alert('valid')
    }
});
