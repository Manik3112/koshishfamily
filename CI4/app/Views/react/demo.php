<script type="text/babel">
    const someDataFromPHP = [{rowA: 'Some Data on Col1',  rowB: 'Some Data on Col'}];
    App = () => {
        return (
            <div>
                <h2 className="text-xl font-bold mb-4">React Data Table</h2>
                <DataTable dataTable={someDataFromPHP} />
            </div>
        );
    };
</script>
