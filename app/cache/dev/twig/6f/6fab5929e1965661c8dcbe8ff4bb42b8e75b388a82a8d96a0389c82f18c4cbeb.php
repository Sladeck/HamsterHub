<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_70de7f079c269f84e56fe97637f99ab0d0a6f56604a609aca64ecd603ea32169 extends Twig_Template
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
        $__internal_7c462456cf921003d35351319815de71666f5d3fde90ada676579834014142c7 = $this->env->getExtension("native_profiler");
        $__internal_7c462456cf921003d35351319815de71666f5d3fde90ada676579834014142c7->enter($__internal_7c462456cf921003d35351319815de71666f5d3fde90ada676579834014142c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c462456cf921003d35351319815de71666f5d3fde90ada676579834014142c7->leave($__internal_7c462456cf921003d35351319815de71666f5d3fde90ada676579834014142c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
