<!-- _company-selection.blade.php -->
@if(isset($companies) && !empty($companies))
    <select class="form-select form-select-sm">
        <option selected>--All Companies</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}">{{ $company->email }}</option>
        @endforeach
    </select>
@endif
