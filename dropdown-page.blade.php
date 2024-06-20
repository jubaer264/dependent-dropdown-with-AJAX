{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dynamic Dependent Dropdown - WebJourney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form>
                    <h4 class="my5">Dynamic Dependent Dropdown - WebJourney</h4>
                    <div class="form-group my-3">
                        <label class="mb-1">Select Category</label>
                        <select name="category" id="category" class="form-control">
                            <option selected value="">select category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label class="mb-1">Select Subcategory</label>
                        <select name="subcategory" id="subcategory_info" class="form-control get_subcategory">
                            <option value="">Select Subcategory</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#category').change(function() {
                let category = $(this).val();
                if(category) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('get.subcategory') }}",
                        data: { category: category },
                        success: function(response) {
                            if(response.status == 'success') {
                                let options = "<option value=''>Select Subcategory</option>";
                                $.each(response.subcategories, function(index, subcategory) {
                                    options += "<option value='" + subcategory.id + "'>" + subcategory.subcategory + "</option>";
                                });
                                $('#subcategory_info').html(options);
                            }
                        }
                    });
                } else {
                    $('#subcategory_info').html("<option value=''>Select Subcategory</option>");
                }
            });
        });
    </script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dynamic Dependent Dropdown - WebJourney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form>
                    <h4 class="my5">Dynamic Dependent Dropdown - WebJourney</h4>
                    <div class="form-group my-3">
                        <label class="mb-1">Select Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="" selected>Select Category</option> <!-- No category selected by default -->
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label class="mb-1">Select Subcategory</label>
                        <select name="subcategory" id="subcategory_info" class="form-control get_subcategory">
                            <option value="">Select Subcategory</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#category').change(function() {
                let category = $(this).val();
                if(category) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('get.subcategory') }}",
                        data: { category: category },
                        success: function(response) {
                            if(response.status == 'success') {
                                let options = "<option value=''>Select Subcategory</option>";
                                $.each(response.subcategories, function(index, subcategory) {
                                    options += "<option value='" + subcategory.id + "'>" + subcategory.subcategory + "</option>";
                                });
                                $('#subcategory_info').html(options);
                            }
                        }
                    });
                } else {
                    $('#subcategory_info').html("<option value=''>Select Subcategory</option>");
                }
            });
        });
    </script>
</body>
</html>
