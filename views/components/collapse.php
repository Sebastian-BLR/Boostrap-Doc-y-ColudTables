<!-- Generalmente, recomendamos usar un botón con el atributo data-bs-target. Si bien no se recomienda desde un punto de vista semántico, también puedes usar un enlace con el atributo href (y un role="button"). En ambos casos, se requiere data-bs-toggle="collapse". -->

<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Enlace con href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Botón con data-bs-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Algún contenido placeholder para el componente de contracción. Este panel está oculto de forma predeterminada, pero se revela cuando el usuario activa el disparador correspondiente.
  </div>
</div>

<!-- El complemento de Collapse también admite el colapso horizontal. Agrega la clase modificadora .collapse-horizontal para cambiar el width en lugar de height y establece un width en el elemento secundario inmediato. -->

<h2>Horizontal</h2>
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Toggle con collapse
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      Este es un contenido placeholder para un colapso horizontal. Está oculto de forma predeterminada y se muestra cuando se activa.
    </div>
  </div>
</div>