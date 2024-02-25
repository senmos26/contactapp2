@includeUnless(empty($companies), 'layouts._filter')

<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @if($contacts->isEmpty())
            <tr><td colspan="7">Aucun contact trouvé</td></tr>
        @else
            @foreach($contacts as $contact)
                <tr class="table-primary">
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>Item</td>
                    <td>
                        <a href="{{ route('contacts.show', ['id' => $contact->id]) }}" class="btn btn-outline-primary">Détails</a>
                        <a class="btn btn-outline-warning">Modifier</a>
                        <a class="btn btn-outline-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot></tfoot>
    </table>
</div>
