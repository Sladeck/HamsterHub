<?php

/* HamsterHubBundle:Default:index.html.twig */
class __TwigTemplate_aa6ae2f5e3bafa5f21d494c29bf14d68a7207c61080e74452df95dc2b8f3f172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:index.html.twig", "HamsterHubBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9544157776459b043bccef3f404e650c38e3a10184d9d656e3bd435ac145ef7d = $this->env->getExtension("native_profiler");
        $__internal_9544157776459b043bccef3f404e650c38e3a10184d9d656e3bd435ac145ef7d->enter($__internal_9544157776459b043bccef3f404e650c38e3a10184d9d656e3bd435ac145ef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9544157776459b043bccef3f404e650c38e3a10184d9d656e3bd435ac145ef7d->leave($__internal_9544157776459b043bccef3f404e650c38e3a10184d9d656e3bd435ac145ef7d_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_edb9b5c4677b475e4cec5da3d8e1eb4b3941b00bd43941cb65afdc35e012816c = $this->env->getExtension("native_profiler");
        $__internal_edb9b5c4677b475e4cec5da3d8e1eb4b3941b00bd43941cb65afdc35e012816c->enter($__internal_edb9b5c4677b475e4cec5da3d8e1eb4b3941b00bd43941cb65afdc35e012816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1wIHQZiOCmo\" frameborder=\"0\" allowfullscreen></iframe>
";
        
        $__internal_edb9b5c4677b475e4cec5da3d8e1eb4b3941b00bd43941cb65afdc35e012816c->leave($__internal_edb9b5c4677b475e4cec5da3d8e1eb4b3941b00bd43941cb65afdc35e012816c_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <iframe width="560" height="315" src="https://www.youtube.com/embed/1wIHQZiOCmo" frameborder="0" allowfullscreen></iframe>*/
/* {% endblock %}*/
/* */
