<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_44838a8ea4643002c68e915705b23575df4c0d03ed501c9c403a5b75043562e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6af483a399334e331472e52a3ffb8d7d4f4d5058cd71304993168fdf188781b = $this->env->getExtension("native_profiler");
        $__internal_d6af483a399334e331472e52a3ffb8d7d4f4d5058cd71304993168fdf188781b->enter($__internal_d6af483a399334e331472e52a3ffb8d7d4f4d5058cd71304993168fdf188781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d6af483a399334e331472e52a3ffb8d7d4f4d5058cd71304993168fdf188781b->leave($__internal_d6af483a399334e331472e52a3ffb8d7d4f4d5058cd71304993168fdf188781b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
