import api from '../../utils/api';

export const getTask = () => {
    return api.get("/Task");
};