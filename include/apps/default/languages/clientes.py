from django.db import models
class Clientes(models.Model):
    codigo_del_cliente = models.CharField(db_column='CODIGO DEL CLIENTE', primary_key=True, max_length=20)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    tipopersona = models.CharField(db_column='TipoPersona', max_length=1, blank=True, null=True)  # Field name made lowercase.
    tipodocumento = models.CharField(db_column='TipoDocumento', max_length=2, blank=True, null=True)  # Field name made lowercase.
    tiporegimen = models.IntegerField(db_column='TipoRegimen', blank=True, null=True)  # Field name made lowercase.
    tipocliente = models.CharField(max_length=50, blank=True, null=True)
    fechacreacion = models.DateTimeField(db_column='FechaCreacion', blank=True, null=True)  # Field name made lowercase.
    sucursal = models.CharField(db_column='Sucursal', max_length=255, blank=True, null=True)  # Field name made lowercase.
    cp = models.CharField(db_column='CP', max_length=3, blank=True, null=True)  # Field name made lowercase.
    fechaclientepotencial = models.DateTimeField(db_column='FechaClientePotencial', blank=True, null=True)  # Field name made lowercase.
    razon_social = models.CharField(db_column='RAZON SOCIAL', max_length=255, unique=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    nombrepersonanatural = models.CharField(db_column='NombrePersonaNatural', max_length=15, blank=True, null=True)  # Field name made lowercase.
    primersegundoapellido = models.CharField(db_column='PrimerSegundoApellido', max_length=15, blank=True, null=True)  # Field name made lowercase.
    sector = models.CharField(db_column='Sector', max_length=250, blank=True, null=True)  # Field name made lowercase.
    codigosector = models.CharField(db_column='CodigoSector', max_length=50, blank=True, null=True)  # Field name made lowercase.
    codigosector2 = models.CharField(db_column='CodigoSector2', max_length=255, blank=True, null=True)  # Field name made lowercase.
    nombresector2 = models.CharField(db_column='NombreSector2', max_length=255, blank=True, null=True)  # Field name made lowercase.
    nit = models.CharField(db_column='NIT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    dv = models.CharField(db_column='DV', max_length=1, blank=True, null=True)  # Field name made lowercase.
    grupo = models.CharField(db_column='Grupo', max_length=50, blank=True, null=True)  # Field name made lowercase.
    direccion = models.CharField(db_column='DIRECCION', max_length=60, blank=True, null=True)  # Field name made lowercase.
    telefono1 = models.CharField(db_column='TELEFONO1', max_length=15, blank=True, null=True)  # Field name made lowercase.
    telefono2 = models.CharField(db_column='TELEFONO2', max_length=15, blank=True, null=True)  # Field name made lowercase.
    fax = models.CharField(db_column='FAX', max_length=15, blank=True, null=True)  # Field name made lowercase.
    ciudad = models.CharField(db_column='CIUDAD', max_length=30, blank=True, null=True)  # Field name made lowercase.
    departamento = models.CharField(db_column='Departamento', max_length=50, blank=True, null=True)  # Field name made lowercase.
    codigopais = models.CharField(db_column='CodigoPais', max_length=2, blank=True, null=True)  # Field name made lowercase.
    pais = models.CharField(db_column='Pais', max_length=50, blank=True, null=True)  # Field name made lowercase.
    website = models.CharField(db_column='WebSite', max_length=255, blank=True, null=True)  # Field name made lowercase.
    i_nupos = models.CharField(db_column='I_Nupos', max_length=50, blank=True, null=True)  # Field name made lowercase.
    tipomoneda = models.CharField(db_column='TipoMOneda', max_length=50, blank=True, null=True)  # Field name made lowercase.
    contacto = models.CharField(db_column='CONTACTO', max_length=60, blank=True, null=True)  # Field name made lowercase.
    cargo = models.CharField(db_column='CARGO', max_length=60, blank=True, null=True)  # Field name made lowercase.
    e_mail = models.CharField(db_column='E-MAIL', max_length=50, blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    telextcontacto = models.CharField(db_column='TelExtContacto', max_length=50, blank=True, null=True)  # Field name made lowercase.
    contactocompras = models.CharField(db_column='ContactoCompras', max_length=50, blank=True, null=True)  # Field name made lowercase.
    cargocompras = models.CharField(db_column='CargoCompras', max_length=50, blank=True, null=True)  # Field name made lowercase.
    emailcompras = models.CharField(db_column='EmailCompras', max_length=50, blank=True, null=True)  # Field name made lowercase.
    telextcompras = models.CharField(db_column='TelExtCompras', max_length=50, blank=True, null=True)  # Field name made lowercase.
    contacto3 = models.CharField(db_column='Contacto3', max_length=60, blank=True, null=True)  # Field name made lowercase.
    cargo3 = models.CharField(db_column='Cargo3', max_length=60, blank=True, null=True)  # Field name made lowercase.
    e_mail3 = models.CharField(db_column='E-Mail3', max_length=50, blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    telextcontacto3 = models.CharField(db_column='TelExtContacto3', max_length=50, blank=True, null=True)  # Field name made lowercase.
    contactopagos = models.CharField(db_column='Contactopagos', max_length=255, blank=True, null=True)  # Field name made lowercase.
    cargopagos = models.CharField(db_column='Cargopagos', max_length=255, blank=True, null=True)  # Field name made lowercase.
    telefonopagos = models.CharField(db_column='TelefonoPagos', max_length=255, blank=True, null=True)  # Field name made lowercase.
    emailpagos = models.CharField(db_column='Emailpagos', max_length=255, blank=True, null=True)  # Field name made lowercase.
    notaspago = models.CharField(db_column='NotasPago', max_length=255, blank=True, null=True)  # Field name made lowercase.
    personafacturaelectronica = models.CharField(db_column='PersonaFacturaElectronica', max_length=25, blank=True, null=True)  # Field name made lowercase.
    emailfacturaelectronica = models.CharField(db_column='EmailFacturaElectronica', max_length=25, blank=True, null=True)  # Field name made lowercase.
    codigo_vendedor = models.CharField(db_column='Codigo_Vendedor', max_length=3, blank=True, null=True)  # Field name made lowercase.
    gran_contribuyente = models.CharField(db_column='Gran_Contribuyente', max_length=1, blank=True, null=True)  # Field name made lowercase.
    compras = models.CharField(db_column='Compras', max_length=1, blank=True, null=True)  # Field name made lowercase.
    servicios = models.CharField(db_column='Servicios', max_length=1, blank=True, null=True)  # Field name made lowercase.
    iva = models.FloatField(db_column='Iva', blank=True, null=True)  # Field name made lowercase.
    ret_iva = models.FloatField(db_column='Ret_iva', blank=True, null=True)  # Field name made lowercase.
    ret_fte = models.FloatField(db_column='Ret_fte', blank=True, null=True)  # Field name made lowercase.
    sobre_base = models.CharField(db_column='Sobre_Base', max_length=1, blank=True, null=True)  # Field name made lowercase.
    cualquier_monto = models.CharField(db_column='Cualquier_Monto', max_length=1, blank=True, null=True)  # Field name made lowercase.
    rteftesobrebase = models.CharField(db_column='Rteftesobrebase', max_length=50, blank=True, null=True)  # Field name made lowercase.
    rteftecualquiermonto = models.CharField(db_column='RteFteCualquiermonto', max_length=50, blank=True, null=True)  # Field name made lowercase.
    retica = models.IntegerField(db_column='RetIca', blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters. Field renamed because it started with '_'.
    dias_de_plazo = models.FloatField(db_column='DIAS DE PLAZO', blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    notas_op = models.CharField(db_column='Notas OP', max_length=3800, blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    notascomercial = models.CharField(db_column='NotasComercial', max_length=3800, blank=True, null=True)  # Field name made lowercase.
    como_facturar = models.CharField(db_column='Como_facturar', max_length=3800, blank=True, null=True)  # Field name made lowercase.
    envio_papeleria = models.CharField(max_length=50, blank=True, null=True)
    estadocliente = models.CharField(max_length=50, blank=True, null=True)
    undfacturacion = models.CharField(db_column='Undfacturacion', max_length=255, blank=True, null=True)  # Field name made lowercase.
    iso = models.CharField(db_column='Iso', max_length=255, blank=True, null=True)  # Field name made lowercase.
    fechaiso = models.DateTimeField(db_column='FechaIso', blank=True, null=True)  # Field name made lowercase.
    isoproceso = models.CharField(db_column='IsoProceso', max_length=255, blank=True, null=True)  # Field name made lowercase.
    basc = models.CharField(db_column='Basc', max_length=255, blank=True, null=True)  # Field name made lowercase.
    fechabasc = models.DateTimeField(db_column='FechaBasc', blank=True, null=True)  # Field name made lowercase.
    bascproceso = models.CharField(db_column='BascProceso', max_length=255, blank=True, null=True)  # Field name made lowercase.
    otrocertficacion = models.CharField(db_column='OtroCertficacion', max_length=255, blank=True, null=True)  # Field name made lowercase.
    rut = models.CharField(db_column='Rut', max_length=255, blank=True, null=True)  # Field name made lowercase.
    camaradecomercio = models.CharField(db_column='CamaradeComercio', max_length=255, blank=True, null=True)  # Field name made lowercase.
    refcomercial = models.CharField(db_column='RefComercial', max_length=255, blank=True, null=True)  # Field name made lowercase.
    refbancaria = models.CharField(db_column='RefBancaria', max_length=255, blank=True, null=True)  # Field name made lowercase.
    clintonempresa = models.CharField(db_column='ClintonEmpresa', max_length=255, blank=True, null=True)  # Field name made lowercase.
    clintonreplegal = models.CharField(db_column='ClintonRepLegal', max_length=255, blank=True, null=True)  # Field name made lowercase.
    convenio = models.CharField(db_column='Convenio', max_length=255, blank=True, null=True)  # Field name made lowercase.
    contraloria = models.CharField(db_column='Contraloria', max_length=255, blank=True, null=True)  # Field name made lowercase.
    procuraduria = models.CharField(db_column='Procuraduria', max_length=255, blank=True, null=True)  # Field name made lowercase.
    visita = models.CharField(db_column='Visita', max_length=255, blank=True, null=True)  # Field name made lowercase.
    supersociedades = models.CharField(db_column='Supersociedades', max_length=255, blank=True, null=True)  # Field name made lowercase.
    cedularepresentante = models.CharField(db_column='CedulaRepresentante', max_length=255, blank=True, null=True)  # Field name made lowercase.
    r1_f04creacioncliente = models.CharField(db_column='R1-F04CreacionCliente', max_length=255, blank=True, null=True)  # Field name made lowercase. Field renamed to remove unsuitable characters.
    copiacertificadobasc = models.CharField(db_column='CopiaCertificadoBasc', max_length=255, blank=True, null=True)  # Field name made lowercase.
    copiacertificadoiso = models.CharField(db_column='CopiaCertificadoISO', max_length=2, blank=True, null=True)  # Field name made lowercase.
    seguimientocliente = models.CharField(db_column='SeguimientoCliente', max_length=3800, blank=True, null=True)  # Field name made lowercase.
    fechaseguimiento = models.DateTimeField(db_column='FechaSeguimiento', blank=True, null=True)  # Field name made lowercase.
    ctasxcobrar = models.CharField(db_column='CtasXCobrar', max_length=10, blank=True, null=True)  # Field name made lowercase.
    ctaretencion = models.CharField(db_column='CtaRetencion', max_length=10, blank=True, null=True)  # Field name made lowercase.
    ctaiva = models.CharField(db_column='CtaIva', max_length=10, blank=True, null=True)  # Field name made lowercase.
    ctafletes = models.CharField(db_column='CtaFletes', max_length=10, blank=True, null=True)  # Field name made lowercase.
    tipoindustria = models.CharField(db_column='TipoIndustria', max_length=255, blank=True, null=True)  # Field name made lowercase.
    segmento = models.CharField(db_column='Segmento', max_length=255, blank=True, null=True)  # Field name made lowercase.
    historia = models.CharField(db_column='Historia', max_length=3800, blank=True, null=True)  # Field name made lowercase.
    cantidadsello = models.CharField(db_column='CantidadSello', max_length=3800, blank=True, null=True)  # Field name made lowercase.
    resp1 = models.CharField(db_column='Resp1', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp2 = models.CharField(db_column='Resp2', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp3 = models.CharField(db_column='Resp3', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp4 = models.CharField(db_column='Resp4', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp5 = models.CharField(db_column='Resp5', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp6 = models.CharField(db_column='Resp6', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp7 = models.CharField(db_column='Resp7', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp8 = models.CharField(db_column='Resp8', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp9 = models.CharField(db_column='Resp9', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp10 = models.CharField(db_column='Resp10', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp11 = models.CharField(db_column='Resp11', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp12 = models.CharField(db_column='Resp12', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp13 = models.CharField(db_column='Resp13', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp14 = models.CharField(db_column='Resp14', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp15 = models.CharField(db_column='Resp15', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp16 = models.CharField(db_column='Resp16', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp17 = models.CharField(db_column='Resp17', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp18 = models.CharField(db_column='Resp18', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp19 = models.CharField(db_column='Resp19', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp20 = models.CharField(db_column='Resp20', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp21 = models.CharField(db_column='Resp21', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp22 = models.CharField(db_column='Resp22', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp23 = models.CharField(db_column='Resp23', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp24 = models.CharField(db_column='Resp24', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp25 = models.CharField(db_column='Resp25', max_length=4, blank=True, null=True)  # Field name made lowercase.
    resp26 = models.CharField(db_column='Resp26', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu1 = models.CharField(db_column='OblAdu1', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu2 = models.CharField(db_column='OblAdu2', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu3 = models.CharField(db_column='OblAdu3', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu4 = models.CharField(db_column='OblAdu4', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu5 = models.CharField(db_column='OblAdu5', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu6 = models.CharField(db_column='OblAdu6', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu7 = models.CharField(db_column='OblAdu7', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu8 = models.CharField(db_column='OblAdu8', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu9 = models.CharField(db_column='OblAdu9', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu10 = models.CharField(db_column='OblAdu10', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu11 = models.CharField(db_column='OblAdu11', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu12 = models.CharField(db_column='OblAdu12', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu13 = models.CharField(db_column='OblAdu13', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu14 = models.CharField(db_column='OblAdu14', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu15 = models.CharField(db_column='OblAdu15', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu16 = models.CharField(db_column='OblAdu16', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu17 = models.CharField(db_column='OblAdu17', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu18 = models.CharField(db_column='OblAdu18', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu19 = models.CharField(db_column='OblAdu19', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obladu20 = models.CharField(db_column='OblAdu20', max_length=4, blank=True, null=True)  # Field name made lowercase.
    replegal = models.CharField(db_column='RepLegal', max_length=4, blank=True, null=True)  # Field name made lowercase.
    suplente = models.CharField(db_column='Suplente', max_length=4, blank=True, null=True)  # Field name made lowercase.
    testablecimiento = models.CharField(db_column='TEstablecimiento', max_length=4, blank=True, null=True)  # Field name made lowercase.
    matriculamercantil = models.CharField(db_column='MatriculaMercantil', max_length=4, blank=True, null=True)  # Field name made lowercase.
    def __str__(self): 
        return str(self.razon_social)
    class Meta:
        managed = False
        db_table = 'Clientes'
        verbose_name = "Cliente"
        verbose_name_plural = "Clientes"
        ordering = ['razon_social']
