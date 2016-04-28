<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_b5517d66306c79dbe02d0777105878e91791f216b6211883d425706eedde3306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d57fd45a0956caade34248764f2392c1047228eb0e6cfd58f75e76c0f99fa9f1 = $this->env->getExtension("native_profiler");
        $__internal_d57fd45a0956caade34248764f2392c1047228eb0e6cfd58f75e76c0f99fa9f1->enter($__internal_d57fd45a0956caade34248764f2392c1047228eb0e6cfd58f75e76c0f99fa9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d57fd45a0956caade34248764f2392c1047228eb0e6cfd58f75e76c0f99fa9f1->leave($__internal_d57fd45a0956caade34248764f2392c1047228eb0e6cfd58f75e76c0f99fa9f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91a7006e9f00f6f1274c6df38544ce8bd29d6dfa1d971b67b70966e8bdbd03e5 = $this->env->getExtension("native_profiler");
        $__internal_91a7006e9f00f6f1274c6df38544ce8bd29d6dfa1d971b67b70966e8bdbd03e5->enter($__internal_91a7006e9f00f6f1274c6df38544ce8bd29d6dfa1d971b67b70966e8bdbd03e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_91a7006e9f00f6f1274c6df38544ce8bd29d6dfa1d971b67b70966e8bdbd03e5->leave($__internal_91a7006e9f00f6f1274c6df38544ce8bd29d6dfa1d971b67b70966e8bdbd03e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
