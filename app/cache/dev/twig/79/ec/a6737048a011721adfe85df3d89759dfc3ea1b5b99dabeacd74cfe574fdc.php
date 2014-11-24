<?php

/* SMSSNBundle:Default:index.html.twig */
class __TwigTemplate_79eca6737048a011721adfe85df3d89759dfc3ea1b5b99dabeacd74cfe574fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMSSNBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMSSNBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SSN";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Hello world!</h1>
    <ul id=\"demo-list\">

        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("smssn_homepage");
        echo "\">HOME</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
        echo "\">Login</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SMSSNBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
