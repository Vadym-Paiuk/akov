<?php
$footer = get_field( 'footer', 'options' );
?>
</main>

<footer class="footer">
	<div class="container">
		<?php if ( ! empty( $footer['text'] ) ): ?>
			<p>
				<?php echo $footer['text']; ?>
			</p>
		<?php endif; ?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>