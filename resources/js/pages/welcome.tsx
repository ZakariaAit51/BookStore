import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';
import Card from '../comps/card.jsx';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;


    return (
        <>
            <Card name='keyboard' desc='an awsome keyboard' price={300} image='image.png' />
        </>
    );
}
