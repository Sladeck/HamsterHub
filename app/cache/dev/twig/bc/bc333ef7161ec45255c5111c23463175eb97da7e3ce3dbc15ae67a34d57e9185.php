<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_d4343affef33092e15032a76c8304a057bd10313b75824239d8f302fbfa48969 extends Twig_Template
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
        $__internal_8a140e8c0a0a8571cb4faaadaf148c426490657101f4da075341df086f6a093a = $this->env->getExtension("native_profiler");
        $__internal_8a140e8c0a0a8571cb4faaadaf148c426490657101f4da075341df086f6a093a->enter($__internal_8a140e8c0a0a8571cb4faaadaf148c426490657101f4da075341df086f6a093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8a140e8c0a0a8571cb4faaadaf148c426490657101f4da075341df086f6a093a->leave($__internal_8a140e8c0a0a8571cb4faaadaf148c426490657101f4da075341df086f6a093a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
