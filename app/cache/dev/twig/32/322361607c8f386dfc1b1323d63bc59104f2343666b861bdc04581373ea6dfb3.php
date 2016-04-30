<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7b7bb8a3abb6ff886ffc4a6dce9f0bcb8db1226aaf344a52687ad44b36055f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_369e7663a2a9c0c6d751438601422fe12856a5c4c1c8802e9b9e5c9eccf38717 = $this->env->getExtension("native_profiler");
        $__internal_369e7663a2a9c0c6d751438601422fe12856a5c4c1c8802e9b9e5c9eccf38717->enter($__internal_369e7663a2a9c0c6d751438601422fe12856a5c4c1c8802e9b9e5c9eccf38717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_369e7663a2a9c0c6d751438601422fe12856a5c4c1c8802e9b9e5c9eccf38717->leave($__internal_369e7663a2a9c0c6d751438601422fe12856a5c4c1c8802e9b9e5c9eccf38717_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7c2b9895d1f3d859f66c06bca3797e6370ce2f58acb7667267fec9a965adb304 = $this->env->getExtension("native_profiler");
        $__internal_7c2b9895d1f3d859f66c06bca3797e6370ce2f58acb7667267fec9a965adb304->enter($__internal_7c2b9895d1f3d859f66c06bca3797e6370ce2f58acb7667267fec9a965adb304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7c2b9895d1f3d859f66c06bca3797e6370ce2f58acb7667267fec9a965adb304->leave($__internal_7c2b9895d1f3d859f66c06bca3797e6370ce2f58acb7667267fec9a965adb304_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e3f316c45939a122e0fa0e58ea5e675f15bfd1330b6e96875ce678218730765d = $this->env->getExtension("native_profiler");
        $__internal_e3f316c45939a122e0fa0e58ea5e675f15bfd1330b6e96875ce678218730765d->enter($__internal_e3f316c45939a122e0fa0e58ea5e675f15bfd1330b6e96875ce678218730765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e3f316c45939a122e0fa0e58ea5e675f15bfd1330b6e96875ce678218730765d->leave($__internal_e3f316c45939a122e0fa0e58ea5e675f15bfd1330b6e96875ce678218730765d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7419b5c89ceccd1bbc70d1fe49236eac8a561b2047a9e81b2596f6ba418d677 = $this->env->getExtension("native_profiler");
        $__internal_e7419b5c89ceccd1bbc70d1fe49236eac8a561b2047a9e81b2596f6ba418d677->enter($__internal_e7419b5c89ceccd1bbc70d1fe49236eac8a561b2047a9e81b2596f6ba418d677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e7419b5c89ceccd1bbc70d1fe49236eac8a561b2047a9e81b2596f6ba418d677->leave($__internal_e7419b5c89ceccd1bbc70d1fe49236eac8a561b2047a9e81b2596f6ba418d677_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
