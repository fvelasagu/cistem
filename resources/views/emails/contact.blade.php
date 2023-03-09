
<body>
    <table>
        <tr>
            <td>Fecha de contacto</td>
            <td>{{ $contact->created_at }}</td>
        </tr>
        <tr>
            <td>Especialidad</td>
            <td>{{ $contact->specialty }}</td>
        </tr>
        <tr>
            <td>Paciente</td>
            <td>{{ $contact->pacient }}</td>
        </tr>
        <tr>
            <td>Rut</td>
            <td>{{ Rut::parse($contact->rut)->fix()->format() }}</td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td>{{ $contact->phone }}</td>
        </tr>
        <tr>
            <td>Correo</td>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <td>Mensaje</td>
            <td>{{ $contact->message }}</td>
        </tr>
    </table>
</body>