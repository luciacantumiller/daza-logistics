<template>
  <div id="security" class="bg-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <div
        class="
          hidden
          lg:block
          bg-gray-50
          absolute
          top-0
          bottom-0
          left-3/4
          w-screen
        "
      />
      <div
        class="
          mx-auto
          text-base
          max-w-prose
          lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none
        "
      >
        <div>
          <h2
            class="
              text-base text-yellow-500
              font-semibold
              tracking-wide
              uppercase
            "
          >
            Seguridad
          </h2>
          <h3
            class="
              mt-2
              text-3xl
              leading-8
              font-extrabold
              tracking-tight
              text-gray-900
              sm:text-4xl
            "
          >
            OPERAMOS CON LA MÁXIMA SEGURIDAD
          </h3>
        </div>
      </div>
      <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
        <div class="relative lg:row-start-1 lg:col-start-2">
          <svg
            class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20"
            width="404"
            height="384"
            fill="none"
            viewBox="0 0 404 384"
            aria-hidden="true"
          >
            <defs>
              <pattern
                id="de316486-4a29-4312-bdfc-fbce2132a2c1"
                x="0"
                y="0"
                width="20"
                height="20"
                patternUnits="userSpaceOnUse"
              >
                <rect
                  x="0"
                  y="0"
                  width="4"
                  height="4"
                  class="text-blue-800"
                  fill="currentColor"
                />
              </pattern>
            </defs>
            <rect
              width="404"
              height="384"
              fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)"
            />
          </svg>
          <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
            <figure>
              <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                <img
                  class="rounded-lg shadow-lg object-cover object-center"
                  src="https://www.homestratosphere.com/wp-content/uploads/2019/07/A-trailer.jpg"
                  alt="Whitney leaning against a railing on a downtown street"
                  width="1184"
                  height="1376"
                />
              </div>
            </figure>
          </div>
        </div>
        <div class="mt-8 lg:mt-0">
          <div
            class="
              mt-5
              prose prose-indigo
              text-gray-500
              mx-auto
              lg:max-w-none lg:row-start-1 lg:col-start-1
            "
          >
            <ul role="list">
              <li v-for="detail in securityDetails" :key="detail">
                {{ detail.name }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { CameraIcon } from "@heroicons/vue/solid";

const securityDetails = [
  {
    name: "Botas de seguridad con casquillo.",
  },
  {
    name: "Uso obligatorio de faja permanente a la hora de la maniobra.",
  },
  {
    name: "Uso obligatorio de guantes al cargar y descargar productos.",
  },
  {
    name: "Deberá contar con extintor.",
  },
  {
    name: "Uso obligatorio de casco.",
  },
  {
    name: "Chaleco antirreflejante.",
  },
  {
    name: "Sin perforaciones, ni alambres.",
  },
  {
    name: "Excelentes condiciones de la unidad.",
  },
  {
    name: "Vehículo limpio.",
  },
  {
    name: "Ausencia de plagas.",
  },
  {
    name: "Contar con certificado de fumigación vigente.",
  },
  {
    name: "Sin olores extraños.",
  },
  {
    name: "Sin pintura descarapelada.",
  },
  {
    name: "Sin astillas y óxido.",
  },
];

export default {
  components: {
    CameraIcon,
  },
  setup() {
    return { securityDetails };
  },
};
</script>