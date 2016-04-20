<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d5afecb51a4f6158b50d3f072e4aab560f910333b52c56c90a60b851ba5399b7 extends Twig_Template
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
        $__internal_8bb1ce69bf1960e75b4524263e2580a3f9715b431419989768a65a5196578691 = $this->env->getExtension("native_profiler");
        $__internal_8bb1ce69bf1960e75b4524263e2580a3f9715b431419989768a65a5196578691->enter($__internal_8bb1ce69bf1960e75b4524263e2580a3f9715b431419989768a65a5196578691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8bb1ce69bf1960e75b4524263e2580a3f9715b431419989768a65a5196578691->leave($__internal_8bb1ce69bf1960e75b4524263e2580a3f9715b431419989768a65a5196578691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
