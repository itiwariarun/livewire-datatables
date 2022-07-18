<div>
    <div wire:ignore>

        <select class="" id="select" >
 
            <option value="">-- Select Properties --</option>
 
            @foreach($props as $prop)
 
                <option value="{{ $prop }}">{{ $prop }}</option>
 
            @endforeach
 
        </select>

    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
@push('scripts')
    <script>
        $(document).ready(funtion(){
            $('#select').select();
            $('#select').on('change',function (e){
                var data =$('#select').select("val");
                @this.set('selectProperty',data);
            });
        });
        </script>
@endpush