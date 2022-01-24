<template>
  <div id="benefits" class="bg-white">
    <div>
      <div class="text-center">
        <p
          class="
            text-3xl text-gray-900
            font-extrabold
            tracking-tight
            sm:text-4xl
          "
        >
          Trabajando con nosotros
        </p>
        <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
          En DAZA LOGISTICS podemos realizar desde un traslado básico hasta
          múltiples cargas manteniendo los más altos niveles de calidad.
        </p>

        <div class="overflow-hidden py-8">
          <div
            class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl"
          >
            <svg
              class="
                hidden
                lg:block
                absolute
                right-full
                transform
                translate-x-1/2 translate-y-12
              "
              width="404"
              height="784"
              fill="none"
              viewBox="0 0 404 784"
              aria-hidden="true"
            >
              <defs>
                <pattern
                  id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d"
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
                    class="text-blue-900"
                    fill="currentColor"
                  />
                </pattern>
              </defs>
              <rect
                width="404"
                height="784"
                fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"
              />
            </svg>

            <div class="relative">
              <div
                class="
                  lg:grid
                  lg:grid-flow-row-dense
                  lg:grid-cols-2
                  lg:gap-8
                  lg:items-center
                "
              >
                <div class="lg:col-start-2">
                  <dl class="mt-10 space-y-10">
                    <div class="relative">
                      <dt>
                        <div
                          class="
                            absolute
                            flex
                            items-center
                            justify-center
                            h-12
                            w-12
                            rounded-md
                            bg-blue-800
                            text-white
                          "
                        >
                          <CheckCircleIcon class="h-6 w-6" />
                        </div>
                        <p
                          class="
                            ml-16
                            text-lg
                            leading-6
                            font-semibold
                            text-gray-800 text-left
                          "
                        >
                          Nuestras unidades están listas para darte el servicio
                          de transporte de carga que requieres:
                        </p>
                      </dt>
                      <dd class="mt-2 ml-16 text-base text-gray-500">
                        <div class="flex space-x-2">
                          <CheckIcon class="flex-none h-6 w-6 text-green-500" />
                          <p>Diferentes capacidades.</p>
                        </div>
                        <div class="flex space-x-2">
                          <CheckIcon class="flex-none h-6 w-6 text-green-500" />
                          <p>Unidades seminuevas y nuevas.</p>
                        </div>
                        <div class="flex space-x-2">
                          <CheckIcon class="flex-none h-6 w-6 text-green-500" />
                          <p>Con ingreso a cualquier puerto y frontera.</p>
                        </div>
                        <div class="flex space-x-2">
                          <CheckIcon class="flex-none h-6 w-6 text-green-500" />
                          <p>Con GPS y rastreo satelital.</p>
                        </div>
                        <div class="flex space-x-2">
                          <CheckIcon class="flex-none h-6 w-6 text-green-500" />
                          <p>Unidades siempre listas.</p>
                        </div>
                      </dd>
                    </div>
                  </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                  <svg
                    class="
                      absolute
                      left-1/2
                      transform
                      -translate-x-1/2
                      translate-y-16
                      lg:hidden
                    "
                    width="784"
                    height="404"
                    fill="none"
                    viewBox="0 0 784 404"
                    aria-hidden="true"
                  >
                    <defs>
                      <pattern
                        id="e80155a9-dfde-425a-b5ea-1f6fadd20131"
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
                          class="text-blue-200"
                          fill="currentColor"
                        />
                      </pattern>
                    </defs>
                    <rect
                      width="784"
                      height="404"
                      fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"
                    />
                  </svg>
                  <img
                    class="relative mx-auto"
                    width="490"
                    src="https://assets.entrepreneur.com/content/3x2/2000/20151229190117-road-commercial-vehicle-company-truck-car-driving-transporter-transportation-cargo-highway-business-delivery-.jpeg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <div class="max-w-3xl mx-auto text-center">
              <p class="mt-4 text-lg text-gray-500 font-bold">
                Beneficios al contratar nuestros servicios
              </p>
            </div>
            <dl
              class="
                mt-12
                space-y-10
                sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12
                lg:gap-x-8
              "
            >
              <div
                v-for="benefit in benefits"
                :key="benefit.name"
                class="relative"
              >
                <dt>
                  <CheckIcon
                    class="absolute h-6 w-6 text-green-500"
                    aria-hidden="true"
                  />
                  <p
                    class="
                      text-left
                      ml-9
                      text-lg
                      leading-6
                      font-medium
                      text-gray-900
                    "
                  >
                    {{ benefit.name }}
                  </p>
                </dt>
              </div>
            </dl>
          </div>
        </div>

        <div class="flex justify-center mt-10">
          <a
            href="/#contact"
            class="
              mt-6
              w-full
              px-6
              py-3
              border border-transparent
              text-base
              font-bold
              rounded-md
              text-white
              bg-blue-800
              shadow-sm
              hover:shadow-2xl hover:bg-blue-800 hover:shadow-xl
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-blue-900
              sm:mt-0 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto
            "
          >
            Contáctanos
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { CheckIcon, CheckCircleIcon } from "@heroicons/vue/outline";

const benefits = [
  {
    name: "Servicio las 24 horas del día",
  },
  {
    name: "Precios accesibles",
  },
  {
    name: "Eficiencia – Discreción – Confiabilidad",
  },
  {
    name: "Entregas en todo el Territorio Nacional",
  },
  {
    name: "Seguridad y rastreo de las unidades",
  },
  {
    name: "Entregas en Estados Unidos y Canada",
  },
];

export default {
  components: {
    CheckIcon,
    CheckCircleIcon,
  },

  setup() {
    return {
      benefits,
    };
  },
};
</script>