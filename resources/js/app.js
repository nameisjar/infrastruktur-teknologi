import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine;

Alpine.plugin(collapse)
Alpine.plugin(focus);

Alpine.start();
// Initialization for ES Users
import {
  Collapse,
  Carousel,
  Tab,
  Stepper,
  initTE,
} from "tw-elements";

initTE({ Collapse, Carousel, Tab, Stepper });



