@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      @if (session('stored'))
        {{ session('stored') }}
      @endif

    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">
            <br />
            <form action="{{ route('vignettes.update',['vignette' => $vignette->id]) }}" method="POST" id="form1" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              @method("PUT")
              @if ($errors->has('legende'))
                {{ $errors->first('legende') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="travel-label">Legende<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="legende" type="text" id="travel-label" required="required" value="{{ $vignette->legende }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              @if ($errors->has('description'))
                {{ $errors->first('description') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="travel-label">Description<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="description" type="text" id="travel-label" required="required" value="{{ $vignette->description }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              @if ($errors->has('url'))
                {{ $errors->first('url') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-begin">Url<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="url" value="{{ $vignette->url }}" id="date-begin" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
