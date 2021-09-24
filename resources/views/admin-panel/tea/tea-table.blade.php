<!--begin: Datatable-->
<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Price') }}</th>
                <th>{{ __('Sale Price') }}</th>
                <th>{{ __('Discount') }}</th>
                <th>{{ __('Sale Type') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teas as $tea)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tea->name_tm }}</td>
                <td>{{ $tea->name_en }}</td>
                <td>{{ $tea->name_ru }}</td>
                <td>
                    <span
                        class="label label-lg font-weight-bold label-{{ $tea->sale_price ? 'light-danger' : 'light-success' }} label-inline">
                        @if($tea->sale_price)
                        <del>{{ $tea->price }} {{ __('manat') }}</del>
                        @else
                        {{ $tea->price }} {{ __('manat') }}
                        @endif
                    </span>
                </td>
                <td>
                    @if($tea->sale_price)
                    <span class="label label-lg font-weight-bold label-success label-inline">
                        {{ $tea->sale_price }} {{ __('manat') }}
                    </span>
                    @endif
                </td>
                <td>
                    @if($tea->discount)
                    <span class="label label-lg font-weight-bold label-danger label-inline">-{{ __($tea->discount) }}%</span>
                    @endif
                </td>
                <td>
                    @if($tea->sale_type)
                    <span
                        class="label label-lg font-weight-bold label-success label-inline">{{ __($tea->sale_type) }}</span>
                    @endif
                </td>
                <td>@include('admin-panel.tea.tea-action', ['model' => $tea])</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <div>
            {{ $teas->links('layouts.admin.pagination') }}
        </div>
    </div>
</div>
<!--end: Datatable-->
