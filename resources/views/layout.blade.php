<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>

{{--Header section start--}}
@include('header')
{{--Header section end--}}
{{----}}
{{--@yield('content')--}}
@section('page')
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Companies</h1>

        </div>
        <form action="/search" method="get" style="display: flex; justify-content: center">
            <input type="text" name="search" id="" placeholder="Enter company name to search">
            <button type="submit">Search</button>
        </form>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Trainer name</th>
                    <th scope="col">Category name</th>
                </tr>
                </thead>
                <tbody>
                @if($companies != null)
                    @foreach($companies as $company)
                        <tr>
                            <th scope="row">{!! $company->company_id !!}</th>
                            <td>{!! $company->company_name !!}</td>
                            <td>{!! $company->company_web !!}</td>
                            <td>{!! $company->company_phone !!}</td>
                            <td>{!! @$company->trainers['trainer_name'] !!}</td>
                            <td>{!! $company->category->category_name !!}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {!! $companies->render() !!}
        </div>
    </div>


@include('footer')

</body></html>
