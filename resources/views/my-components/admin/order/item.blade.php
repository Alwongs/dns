<tr class="app-table__item">

    <td class="app-table__id">{{ $order->id }}</td>
    <td class="app-table__name">{{ $order->name}}</td>
    <td class="app-table__phone">{{ $order->phone }}</td>
    <td class="app-table__date">{{ $order->created_at->format('H:i d.m.Y') }}</td>
    <td class="app-table__price">{{ $order->calculateFullSum() }}</td>
    <td class="app-table__actions">
        @if(Auth::user()->isAdmin())
            <a href="{{ route('orders.show', $order) }}" class="app-btn btn-success">Открыть</a> 
        @else
            <a href="{{ route('person-orders.show', $order) }}" class="app-btn btn-success">Открыть</a> 
        @endif   
    </td>

</tr>