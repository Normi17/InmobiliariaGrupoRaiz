function getBotResponse(input) {
  // Respuestas simples
  if (input.toLowerCase() == "hola") {
    return "¡Hola! <br>" 
    +"espero estés bien ¿Cómo puedo ayudarte?  <br>"
    + "1. Para saber sobre nosotros <br>"
    + "2. Para saber nuestra ubicacion <br>"
    + "3. Para saber sobre nuestros proyectos realizados <br>"
    + "4. Para saber como comunicarte con nuestros asesores";

  } else if (input.toLowerCase() == "goodbye") {
    return "¡Hablamos luego!";
  }

  // Opción de selección de número del 1 al 7
  else if (/^\d+$/.test(input)) {
    const number = parseInt(input);
    if (number >= 1 && number <= 7) {
      switch (number) {
        case 1:
          return "En Grupo Raíz, entendemos que la compra, venta o inversión en propiedades es una de las decisiones más importantes que puedes tomar en tu vida. Es por eso que nos enorgullece <br>" 
          +"ofrecerte nuestro conocimiento y experiencia en el mercado inmobiliario, brindándote un servicio excepcional y personalizado en todas tus transacciones <br>"
          +"En Grupo Raíz, nos destacamos por nuestra integridad, transparencia y atención al detalle. Nos esforzamos por proporcionarte información precisa y actualizada <br>" 
          +"sobre el mercado inmobiliario, así como asesoramiento experto para que tomes decisiones informadas. Nuestro objetivo es asegurarnos de que te sientas tranquilo y confiado en cada paso del proceso. <br>" 
          +" ''No importa cuál sea tu sueño inmobiliario, en Grupo Raíz estamos aquí para hacerlo realidad. ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a encontrar la propiedad perfecta! ''";

        case 2:
          return "Nos ubicamos en el ''Jr. 2 de mayo 1040 interior 6 segundo piso'' Cerca de la Plaza de Armas Huánuco ";
        case 3:
          return "Nuestro primer proyecto terminado es ''Residencial los Angeles'' Donde todos nuestros clientesn quedaron satisfechos con nuestro trabajo <br>"
          +"-Proyecto residencial ''JARDINES DE LA ESPERANZA'' Estamos en proceso de cada proyecto nuestro sea la mejor posible, por eso nos enforzamos en entregarle nuestros terrenos con titulo de agua y desague <br>"
          +"-Proyecto Residencial ''LA NUEVA ESPERANZA'' otro proyecto en proceso que tenemos para la conclusion y con todos nuestros clientes satisfechos <br>"
          +"-Proyecto residencial ''LAS TORRES'' otro proyecto en proceso que tenemos para la conclusion y con todos nuestros clientes satisfechos ";
        case 4:
          return "Para poder comunicarte con nuestros asesores altamente capacitados,  puedes dirigirte al apartado ''NOSOTROS'' de nuestra pagina web <br>" 
          +"Nuestros asesores estan capacitados para ayudarte en todas las dudas que tengas,  ayudarte en la compra de tu propio terreno y asesorarte en cada paso que necesites realizar";

      }
    }
  }

  return "¡Prueba a preguntar algo más!";
}