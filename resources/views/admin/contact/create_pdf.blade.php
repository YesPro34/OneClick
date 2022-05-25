<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<style>
    .content-table{
        border-collapse:collapse;
        margin:25px 0 ;
        font-size:0.9em;
        min-width:400px;
    }
    .content-table thead tr{
        background:#009879;
        color:#ffffff;
        text-align:left;
        font-weight:bold;
    }
    .content-table th,
    .content-table td{
        padding: 12px 15px; 
    }
    .content-table tbody tr{
         border-bottom: 1px solid #dddddd;
    }
    .content-table tbody tr:nth-of-type(even){
        background: #f3f3f3;
    }
    .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #009879;
    }
   
</style>
<body>
    <table class="content-table">
        <thead>
               <tr>
                    <th>Nom Complete</th>
                
                    <th>Téléphone</th>
               
                    <th>Email</th>
               
                    <th>Message</th>
               
                    <th>status</th>
            
                    <th>Date</th>
                 </tr>
        </thead>
        <tbody>

           

            @foreach ($data as $ele )
                 <tr>                
                     <td>{{  $ele->name  }}</td>
                     
                     <td>{{  $ele->phone  }}</td>
                     
                     <td>{{  $ele->email  }}</td>
                     
                     <td>{{  $ele->message  }}</td>
                     
                     <td>{{  $ele->status  }}</td>

                     <td>{{  $ele->created_at }}</td>
                  </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>