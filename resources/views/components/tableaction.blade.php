<div>
    <form action="{{ $add }}" method="post" id="form_delete">

        <div class="justify-center">
            <a href="{{ $dell }}" class="inline-flex ">
                <i class="fas fa-edit"></i>
            </a>

            <button class="inline-flex border-0">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
        @csrf
        @method('DELETE')
    </form>
</div>
