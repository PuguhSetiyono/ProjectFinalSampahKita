import Landingpage from '../Pages/Landingpage.vue';
import Layanan from './components/Layanan.vue';
import Pelanggan from './components/Pelanggan.vue';
import Pemesanan from '../Pages/Pemesanan.vue';

const routes = [
  {
    path: '/',
    name: 'landingpage',
    component: Landingpage,
  },
  {
    path: '/layanan',
    name: 'layanan',
    component: Layanan,
  },
  {
    path: '/pelanggan',
    name: 'pelanggan',
    component: Pelanggan,
  },
  {
    path: '/pemesanan',
    name: 'pemesanan',
    component: Pemesanan,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
