<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6377e41779f759c63c278bee6c48a5b90bcbb1d8ec315296d21f70681ad86291 extends Twig_Template
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
        $__internal_86f9d56d718f292e58f0ceb1cf103d319a3e3dccc1545e2af467feebead6fb53 = $this->env->getExtension("native_profiler");
        $__internal_86f9d56d718f292e58f0ceb1cf103d319a3e3dccc1545e2af467feebead6fb53->enter($__internal_86f9d56d718f292e58f0ceb1cf103d319a3e3dccc1545e2af467feebead6fb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_86f9d56d718f292e58f0ceb1cf103d319a3e3dccc1545e2af467feebead6fb53->leave($__internal_86f9d56d718f292e58f0ceb1cf103d319a3e3dccc1545e2af467feebead6fb53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
