import PageLink from '@/Components/PageLink';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard(props) {
    let users = props.users;

    return (
        <AuthenticatedLayout user={props.auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}>

            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="relative overflow-x-auto">
                        <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" className="px-6 py-3">#</th>
                                    <th scope="col" className="px-6 py-3">Title</th>
                                    <th scope="col" className="px-6 py-3">Name</th>
                                    <th scope="col" className="px-6 py-3">Email</th>
                                    <th scope="col" className="px-6 py-3">Company</th>
                                    <th scope="col" className="px-6 py-3">Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    users.data.map((user, index) => {
                                        return (
                                            <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700" key={index}>
                                                <td className="px-6 py-4">{index + 1}</td>
                                                <td className="px-6 py-4">{user.title}</td>
                                                <td className="px-6 py-4">{user.name}</td>
                                                <td className="px-6 py-4"> {user.email} </td>
                                                <td className="px-6 py-4"> {user.company} </td>
                                                <td className="px-6 py-4"> {user.designation} </td>
                                            </tr>
                                        )
                                    })
                                }

                                {
                                    users.data.length == 0 && (<tr>
                                        <td className='text-center py-5' colSpan={8}>No Records Found</td>
                                    </tr>)
                                }

                            </tbody>
                        </table>
                    </div>
                    <div className=''>
                        <PageLink links={users.links}></PageLink>
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
