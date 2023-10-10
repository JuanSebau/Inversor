<form method="post" action="">
    <label for="dinero_invertir">¿Cuál es el dinero que tienes para invertir?</label>
    <input type="text" name="dinero_invertir" id="dinero_invertir" required>

    <label for="ticket_promedio">¿Cuál es tu ticket promedio de productos?</label>
    <input type="text" name="ticket_promedio" id="ticket_promedio" required>

    <label for="pedidos">Pedidos:</label>
    <input type="text" name="pedidos" id="pedidos" required>

    <label for="tasa_conversion_web">¿Sabes cuál es tu tasa de conversión en la web?</label>
    <input type="text" name="tasa_conversion_web" id="tasa_conversion_web" value="0.5">

    <label for="tasa_conversion_whatsapp">Si sabes cuál es tu tasa de conversión en WhatsApp, escríbela por favor:</label>
    <input type="text" name="tasa_conversion_whatsapp" id="tasa_conversion_whatsapp" value="10">

    <label for="cpc_actual">Conoces tu CPC actual:</label>
    <input type="text" name="cpc_actual" id="cpc_actual" value="$200">

    <label for="costo_adquirir_contacto">Sabes cuánto te vale adquirir un contacto:</label>
    <input type="text" name="costo_adquirir_contacto" id="costo_adquirir_contacto" value="$6,000">

    <label for="mas_informacion">¿Quieres decirnos más para darle un dato más exacto?</label>
    <input type="checkbox" name="mas_informacion" id="mas_informacion" value="1">
    
    <div id="mas_informacion_opciones" style="display: none;">
        <label for="sector">Aspecto 1: Cuál es tu sector:</label>
        <select name="sector" id="sector">
            <!-- Aquí puedes agregar las opciones del sector dinámicamente -->
        </select>

        <label for="tiempo_mercado">Aspecto 2: Cuánto tiempo llevas en el mercado:</label>
        <select name="tiempo_mercado" id="tiempo_mercado">
            <!-- Aquí puedes agregar las opciones de tiempo en el mercado dinámicamente -->
        </select>

        <label for="campanas_pauta">Aspecto 3: Tienes campañas activas de pauta:</label>
        <select name="campanas_pauta" id="campanas_pauta">
            <option value="SI">SI</option>
            <option value="NO">NO</option>
        </select>
    </div>

    <input type="submit" value="Enviar">
</form>

<script>
    document.getElementById("mas_informacion").addEventListener("change", function () {
        var opciones = document.getElementById("mas_informacion_opciones");
        opciones.style.display = this.checked ? "block" : "none";
    });
</script>
