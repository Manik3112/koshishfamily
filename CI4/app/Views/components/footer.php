    <script type="text/babel">
        if(App){
            const reactRoot = ReactDOM.createRoot(document.getElementById('reactRoot'));
            reactRoot.render(<App />);
        }
    </script>
    <!-- Include React and ReactDOM from CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/react.js"></script> -->
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/react-dom.js"></script> -->
    <!-- Include Babel for JSX support -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/babel.min.js"></script> -->
    </body>
</html>
