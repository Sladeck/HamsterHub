<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ea81dceff93b2e222bb6070daa9ec43357b8af086afbf452114723fac342bf27 extends Twig_Template
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
        $__internal_3011bfda39b49e9db376c8135cd8d1653a4eb28e3afbfce9344e22499d7a76bd = $this->env->getExtension("native_profiler");
        $__internal_3011bfda39b49e9db376c8135cd8d1653a4eb28e3afbfce9344e22499d7a76bd->enter($__internal_3011bfda39b49e9db376c8135cd8d1653a4eb28e3afbfce9344e22499d7a76bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3011bfda39b49e9db376c8135cd8d1653a4eb28e3afbfce9344e22499d7a76bd->leave($__internal_3011bfda39b49e9db376c8135cd8d1653a4eb28e3afbfce9344e22499d7a76bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
