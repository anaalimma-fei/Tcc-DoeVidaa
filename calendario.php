<?php
$pageTitle = 'Calendário';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header"><div class="container"><div class="eyebrow">Agenda</div><h1>Calendário de campanhas</h1><p class="muted">Calendário demonstrativo. As campanhas abaixo não representam eventos reais.</p></div></section>
<section class="section"><div class="container">
<div class="card">
<h2>Outubro de 2026</h2>
<table class="calendar">
<thead><tr><th>Dom</th><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>Sáb</th></tr></thead>
<tbody>
<tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr>
<tr><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>
<tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15<span class="calendar-event">Doe Vida<br>08:00</span></td><td>16</td><td>17</td></tr>
<tr><td>18</td><td>19</td><td>20</td><td>21</td><td>22<span class="calendar-event">Gota de Esperança<br>09:00</span></td><td>23</td><td>24</td></tr>
<tr><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30<span class="calendar-event">Viva a Vida<br>08:30</span></td><td>31</td></tr>
</tbody></table>
</div>
</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>
