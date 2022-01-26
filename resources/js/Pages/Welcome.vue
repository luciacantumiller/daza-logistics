<template>
  <jet-banner />

  <Menu />
  <div class="">
    <Header />
    <Benefits />
    <Security />
    <Services />
    <Contact />
  </div>
  <Footer />
</template>

<script>
import Menu from "./Welcome/Menu.vue";
import Header from "./Welcome/Header.vue";
import Benefits from "./Welcome/Benefits.vue";
import Security from "./Welcome/Security.vue";
import Services from "./Welcome/Services.vue";
import Contact from "./Welcome/Contact.vue";
import Footer from "./Welcome/Footer.vue";
import JetBanner from "@/Jetstream/Banner.vue";

export default {
  components: {
    Menu,
    Header,
    Benefits,
    Security,
    Services,
    Contact,
    Footer,
    JetBanner,
  },
  setup() {},
};
</script>