@props(['url' => ''])

<form action="{{ $url }}" x-data="confirmDeleteModal" method="POST">
    @csrf
    @method('DELETE')

    <button x-on:click="showModal()" type="button" class="text-red-500 hover:text-red-700">
        Delete
    </button>
</form>
