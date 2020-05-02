<h1>Articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']); ?>
<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Created</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($articles as $article){
		?>
		<tr>
			<td>
				<?php echo $this->Html->link($article->title,['action' => 'view', $article->slug]) ?>
			</td>
			<td>
				<?php echo $article->created->format(DATE_RFC850); ?>
			</td>
			<td>
				<?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?>
				<?= $this->Form->postLink('Delete', ['action' => 'delete', $article->slug], ['confirm' => 'Are you sure?']); ?>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>