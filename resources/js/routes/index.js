import { createRouter, createWebHistory } from 'vue-router';

import IndexAdminDashboard from '../components/Admin/Dashboard/IndexDashboard.vue';
import IndexAdminEmployee from '../components/Admin/Employee/IndexEmployee.vue';
import IndexAdminMapping from '../components/Admin/Mapping/IndexMapping.vue';
import IndexAdminSchedule from '../components/Admin/Schedule/IndexSchedule.vue';

const routes = [
    {
        path: '/api/admin/index',
        name: 'index',
        component: IndexAdminDashboard,
    },
    {
        path: '/api/admin/employee',
        name: 'employee',
        component: IndexAdminEmployee,
    },
    {
        path: '/api/admin/mapping',
        name: 'mapping',
        component: IndexAdminMapping,
    },
    {
        path: '/api/admin/schedule',
        name: 'schedule',
        component: IndexAdminSchedule,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;