<script type='text/babel'>
// Please Code Below this Line

    // Rendering Table for Data Report
    const DataTable = ({ dataTable }) => {
        return (
            <div className='container mx-auto px-4 mt-4'>
                <table className='table-auto w-full'>
                    <thead>
                        <tr>
                            <th className='p-1 border-2 border-blue-300'>Row A</th>
                            <th className='p-1 border-2 border-blue-300'>Row B</th>
                        </tr>
                    </thead>
                    <tbody>
                        {dataTable.map((x, index) => (
                            <tr key={index}>
                                <td className='p-1 border-2 border-blue-300'>{x.rowA}</td>
                                <td className='p-1 border-2 border-blue-300'>{x.rowB}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        );
    };

// Please Code Above this Line
</script>