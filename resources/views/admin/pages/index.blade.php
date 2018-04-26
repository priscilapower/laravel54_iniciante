@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Administração de Páginas @endslot

    <a href="{{ route('pages.create') }}" class="btn btn-default">Nova</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th class="text-right">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td class="text-right">
                <a href="{{ route('pages.show', $page->id) }}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}
@endcomponent