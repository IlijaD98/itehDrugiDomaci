@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
        
        <tbody>
        <tr>
            <td>Iznos</td>
            <td>{{$total}} $</td>
            
        </tr>
        <tr>
            <td>Porez</td>
            <td>0 $</td>
            
        </tr>
        <tr>
            <td>Isporuka</td>
            <td>5 $</td>
            
        </tr>
        <tr>
            <td>Ukupan iznos</td>
            <td>{{$total+10}} $</td>
        
        </tr>
        </tbody>
    </table>
    <div>
                <form action="/orderplace" method="POST">
                @csrf
            <div class="form-group">
                
                <textarea name="address" placeholder="Unesite adresu" class="form-control" id="email"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Nacin placanja: </label><br>
                <input type="radio" value="cash" name="payment"><span>Visa kartica</span><br>
                <input type="radio" value="cash" name="payment"><span>Master kartica</span>
            </div>
            
            <button type="submit" class="btn btn-default">Kupi</button>
            </form>
    </div>
    

   </div>
</div>
@endsection