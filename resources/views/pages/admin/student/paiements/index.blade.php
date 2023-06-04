@extends('pages.admin.layouts._master')


@section('title','Paiement')


@section('content')
<div class="paiements container-sm">
    <div class="paiements-search">
        <input type="text" name="search" placeholder="Search..." />
        <select name="status" class="paiements-search_status">
            <option value="">Status</option>
            <option value="paye">Payé</option>
            <option value="annule">Annulé</option>
            <option value="attente">En Attente</option>
            <option value="pret">Pret</option>
        </select>
    </div>

    <div class="paiements-table">
        <table>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nom de formation</th>
                    <th>Status</th>
                    <th>Recu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#01</td>
                    <td>kifach t9ad atay</td>
                    <td>
                        <button class="paye">Payé</button>
                    </td>
                    <td>
                        <button class="attente">En Attente</button>
                    </td>
                </tr>
                <tr>
                    <td>#02</td>
                    <td>kifach t9ad atay</td>
                    <td>
                        <button class="annule">Annulé</button>
                    </td>
                    <td>
                        <button class="attente">En Attente</button>
                    </td>
                </tr>
                <tr>
                    <td>#03</td>
                    <td>kifach t9ad atay</td>
                    <td>
                        <button class="paye">Payé</button>
                    </td>
                    <td>
                        <button class="pret">Pret</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="paiements-navigate">
        <button>Precedent</button>
        <button>Suivant</button>
    </div>
</div>
@endsection