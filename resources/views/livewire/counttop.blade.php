<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-5 text-center w-full p-4 overflow-auto">
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="years" class="countdown font-mono text-5xl">0</span>
    years
  </div>
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="months" class="countdown font-mono text-5xl">0</span>
    months
  </div>
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="days" class="countdown font-mono text-5xl">0</span>
    days
  </div>
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="hours" class="countdown font-mono text-5xl">0</span>
    hours
  </div>
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="minutes" class="countdown font-mono text-5xl">0</span>
    min
  </div>
  <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
    <span id="seconds" class="countdown font-mono text-5xl">0</span>
    sec
  </div>
</div>



<script>
  // Establecer la fecha de inicio (13 de febrero de 2024) en la zona horaria de Ecuador
  const startDate = new Date('2024-02-13T00:00:00-05:00'); // UTC-5 para Ecuador

  function updateCounter() {
    const now = new Date();

    // Calcular la diferencia de tiempo
    let years = now.getFullYear() - startDate.getFullYear();
    let months = now.getMonth() - startDate.getMonth();
    let days = now.getDate() - startDate.getDate();

    // Ajustar si los días son negativos
    if (days < 0) {
      months--; // Restar un mes
      // Obtener el número de días del mes anterior
      const lastMonth = new Date(now.getFullYear(), now.getMonth(), 0); // Último día del mes anterior
      days += lastMonth.getDate(); // Agregar días del mes anterior
    }

    // Ajustar si los meses son negativos
    if (months < 0) {
      years--; // Restar un año
      months += 12; // Ajustar a 12 meses
    }

    // Calcular horas, minutos y segundos
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    // Actualizar los elementos del DOM
    document.getElementById('years').textContent = years;
    document.getElementById('months').textContent = months;
    document.getElementById('days').textContent = days;
    document.getElementById('hours').textContent = hours;
    document.getElementById('minutes').textContent = minutes;
    document.getElementById('seconds').textContent = seconds;
  }

  // Actualizar el contador cada segundo
  setInterval(updateCounter, 1000);
</script>
