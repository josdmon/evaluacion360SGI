<div class="row">
 <tr>
  <div class="col-md-8">
	<td>Usted puede esperar de <?= strtoupper($_users[$s]['nombres']); ?> que sea una persona:
		<div class="collapse" id="retro1">
		  <div class="well">
		    <p><b>Texto de ayuda:</b> de manera muy RESPETUOSA en esta pregunta usted deberá indicar o comentar aquellas cosas buenas que siempre puede esperar que esta persona realice en su trabajo, resaltar esas cualidades que lo hacen un buen miembro del equipo. Ejemplo: “Puedo esperar que siempre sea colaborador, puntual y respetuoso”.</p>
		  </div>
		</div>
	</td>
  </div>

  <div class="col-md-4">
  	<td>
  		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#retro1" aria-expanded="false" aria-controls="retro1">
  			<div class="glyphicon glyphicon-question-sign"></div>
  		</button>
  	</td>

  	<td colspan="5">
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Respetuosa" name="preabi1[]">Respetuosa
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Puntual con las entregas y compromisos laborales" name="preabi1[]">Puntual con las entregas y compromisos laborales
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Tolerante y que acepte las opiniones variadas y diversas de los demás" name="preabi1[]">Tolerante y que acepte las opiniones variadas y diversas de los demás
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Que acepte las críticas constructivas" name="preabi1[]">Que acepte las críticas constructivas
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Preocupada por hacer sus tareas cada vez mejor" name="preabi1[]">Preocupada por hacer sus tareas cada vez mejor
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Colaboradora con otros compañeros de trabajo" name="preabi1[]">Colaboradora con otros compañeros de trabajo
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Comprometida con el logro de resultados del área" name="preabi1[]">Comprometida con el logro de resultados del área
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Que facilita la resolución de problemas" name="preabi1[]">Que facilita la resolución de problemas
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Activa y propositiva para desarrollar su trabajo y el del equipo" name="preabi1[]">Activa y propositiva para desarrollar su trabajo y el del equipo
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Que con su ejemplo demuestra profesionalismo y un trabajo bien hecho" name="preabi1[]">Que con su ejemplo demuestra profesionalismo y un trabajo bien hecho
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Que contribuye con su forma de ser a un clima laboral agradable" name="preabi1[]">Que contribuye con su forma de ser a un clima laboral agradable
        </label>
      </div>
    </td>

  </div>

 </tr>
</div>

<div class="row">
 <tr>
  <div class="col-md-8">
  <td>Las actitudes y comportamientos de <?= strtoupper($_users[$s]['nombres']); ?> que están afectando el trabajo del área son:
    <div class="collapse" id="retro2">
      <div class="well">
        <p><b>Texto de ayuda: </b> de manera muy RESPETUOSA comentar las cosas que JAMÁS puede esperar de esta persona, generalmente hará referencia a aquellas actitudes o comportamientos que pueden ser negativos o promover un bajo desempeño en la persona. Ejemplo “No puedo esperar que llegue temprano a las reuniones de área o comités de obra, tampoco que use la ropa adecuada según lo exige el trabajo”.</p>
      </div>
    </div>
  </td>
  </div>

  <div class="col-md-4">
    <td>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#retro2" aria-expanded="false" aria-controls="retro2">
        <div class="glyphicon glyphicon-question-sign"></div>
      </button>
    </td>

    <td colspan="5">
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Su trato y respeto hacia los demás compañeros es cuestionable" name="preabi2[]">Su trato y respeto hacia los demás compañeros es cuestionable
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Incumple con las entregas y compromisos laborales" name="preabi2[]">Incumple con las entregas y compromisos laborales
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No tolera ni acepta las opiniones variadas y diversas de los demás" name="preabi2[]">No tolera ni acepta las opiniones variadas y diversas de los demás
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No acepta fácilmente las críticas constructivas" name="preabi2[]">No acepta fácilmente las críticas constructivas
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No se esfuerza mucho por hacer sus tareas cada vez mejor" name="preabi2[]">No se esfuerza mucho por hacer sus tareas cada vez mejor
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No es muy colaborativa con otros compañeros de trabajo" name="preabi2[]">No es muy colaborativa con otros compañeros de trabajo
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No tiene un compromiso alto con el logro de resultados del área" name="preabi2[]">No tiene un compromiso alto con el logro de resultados del área
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Dificulta la resolución de problemas" name="preabi2[]">Dificulta la resolución de problemas
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Tiene a ser una persona pasiva y sin propuestas para mejorar su trabajo y el del equipo" name="preabi2[]">Tiene a ser una persona pasiva y sin propuestas para mejorar su trabajo y el del equipo
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="No es un ejemplo de profesionalismo y un trabajo bien hecho" name="preabi2[]">No es un ejemplo de profesionalismo y un trabajo bien hecho
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Contribuye muy poco o nada a un clima laboral agradable" name="preabi2[]">Contribuye muy poco o nada a un clima laboral agradable
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" value="Es una persona indiferente (le da lo mismo) si el área y sus compañeros mejoran o no" name="preabi2[]">Es una persona indiferente (le da lo mismo) si el área y sus compañeros mejoran o no
        </label>
      </div>
    </td>

  </div>

 </tr>
</div>

<div class="row">
 <tr>
  <div class="col-md-8">
  <td>Si usted fuera Jefe de <?= strtoupper($_users[$s]['nombres']); ?> que sugerencias, correcciones o felicitaciones le daría usted.
    <div class="collapse" id="retro3">
      <div class="well">
        <p><b>Texto de ayuda:</b> de manera muy RESPETUOSA en este espacio la idea es comentar respecto a temas que son importantes en el trabajo de esta persona, puede felicitarla por su forma de proceder o tocar temas que ninguna de las preguntas anteriores hayan abordado. Ejemplo: “Eres un gran compañero de equipo, te sugeriría que por tu salud hagas más deporte y te cuides al dormir. Podría ser bueno que hagas un curso de Excel”.</p>
      </div>
    </div>
  </td>
  </div>

  <div class="col-md-4">
    <td>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#retro3" aria-expanded="false" aria-controls="retro3">
        <div class="glyphicon glyphicon-question-sign"></div>
      </button>
    </td>

    <td colspan="5"><textarea class="form-control" required name="preabi3" rows="3" placeholder="Texto"></textarea></td>

  </div>

 </tr>
</div>
