(function() {
    var GenerateQRCode, htmlEncode;

    htmlEncode = function(value) {
        return $('<div/>').text(value).html();
    };

    GenerateQRCode = function() {
        if (!$('[data-grab=url]').val()) {
            swal('Oops...', 'Input\'s value is empty!', 'error');
            return false;
        }

        // Clear previous QR Code
        $('[data-output=qrcode]').empty();
        // Generate and Output QR Code
        return $('[data-output=qrcode]').attr('src', 'https://chart.googleapis.com/chart?cht=qr&chl=' + htmlEncode($('[data-grab=url]').val()) + '&chs=160x160&chld=L|0');
    };

    $('[data-grab=url]').on('keyup', function(e) {
        if (e.keyCode === 13) {
            return GenerateQRCode();
        }
    });

    $('[data-qrcode=generate]').on('click', function() {
        return GenerateQRCode();
    });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBLGNBQUEsRUFBQTs7RUFBQSxVQUFBLEdBQWEsUUFBQSxDQUFDLEtBQUQsQ0FBQTtXQUNYLENBQUEsQ0FBRSxRQUFGLENBQVcsQ0FBQyxJQUFaLENBQWlCLEtBQWpCLENBQXVCLENBQUMsSUFBeEIsQ0FBQTtFQURXOztFQUdiLGNBQUEsR0FBaUIsUUFBQSxDQUFBLENBQUE7SUFDZixJQUFHLENBQUMsQ0FBQSxDQUFFLGlCQUFGLENBQW9CLENBQUMsR0FBckIsQ0FBQSxDQUFKO01BQ0UsSUFBQSxDQUFLLFNBQUwsRUFBZ0IsMEJBQWhCLEVBQTRDLE9BQTVDO0FBQ0EsYUFBTyxNQUZUO0tBQUY7OztJQUtFLENBQUEsQ0FBRSxzQkFBRixDQUF5QixDQUFDLEtBQTFCLENBQUEsRUFMRjs7V0FRRSxDQUFBLENBQUUsc0JBQUYsQ0FBeUIsQ0FBQyxJQUExQixDQUErQixLQUEvQixFQUFzQyxnREFBQSxHQUFtRCxVQUFBLENBQVcsQ0FBQSxDQUFFLGlCQUFGLENBQW9CLENBQUMsR0FBckIsQ0FBQSxDQUFYLENBQW5ELEdBQTRGLHVCQUFsSTtFQVRlOztFQVdqQixDQUFBLENBQUUsaUJBQUYsQ0FBb0IsQ0FBQyxFQUFyQixDQUF3QixPQUF4QixFQUFpQyxRQUFBLENBQUMsQ0FBRCxDQUFBO0lBQy9CLElBQUcsQ0FBQyxDQUFDLE9BQUYsS0FBYSxFQUFoQjthQUNFLGNBQUEsQ0FBQSxFQURGOztFQUQrQixDQUFqQzs7RUFJQSxDQUFBLENBQUUsd0JBQUYsQ0FBMkIsQ0FBQyxFQUE1QixDQUErQixPQUEvQixFQUF3QyxRQUFBLENBQUEsQ0FBQTtXQUN0QyxjQUFBLENBQUE7RUFEc0MsQ0FBeEM7QUFsQkEiLCJzb3VyY2VzQ29udGVudCI6WyJodG1sRW5jb2RlID0gKHZhbHVlKSAtPlxuICAkKCc8ZGl2Lz4nKS50ZXh0KHZhbHVlKS5odG1sKClcblxuR2VuZXJhdGVRUkNvZGUgPSAtPlxuICBpZiAhJCgnW2RhdGEtZ3JhYj11cmxdJykudmFsKClcbiAgICBzd2FsICdPb3BzLi4uJywgJ0lucHV0XFwncyB2YWx1ZSBpcyBlbXB0eSEnLCAnZXJyb3InXG4gICAgcmV0dXJuIGZhbHNlXG4gIFxuICAjIENsZWFyIHByZXZpb3VzIFFSIENvZGVcbiAgJCgnW2RhdGEtb3V0cHV0PXFyY29kZV0nKS5lbXB0eSgpXG5cbiAgIyBHZW5lcmF0ZSBhbmQgT3V0cHV0IFFSIENvZGVcbiAgJCgnW2RhdGEtb3V0cHV0PXFyY29kZV0nKS5hdHRyICdzcmMnLCAnaHR0cHM6Ly9jaGFydC5nb29nbGVhcGlzLmNvbS9jaGFydD9jaHQ9cXImY2hsPScgKyBodG1sRW5jb2RlKCQoJ1tkYXRhLWdyYWI9dXJsXScpLnZhbCgpKSArICcmY2hzPTE2MHgxNjAmY2hsZD1MfDAnXG5cbiQoJ1tkYXRhLWdyYWI9dXJsXScpLm9uICdrZXl1cCcsIChlKSAtPlxuICBpZiBlLmtleUNvZGUgPT0gMTNcbiAgICBHZW5lcmF0ZVFSQ29kZSgpXG4gICAgXG4kKCdbZGF0YS1xcmNvZGU9Z2VuZXJhdGVdJykub24gJ2NsaWNrJywgLT5cbiAgR2VuZXJhdGVRUkNvZGUoKVxuICAiXX0=
//# sourceURL=coffeescript